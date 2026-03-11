import React from "react";
import { View, Text } from "react-native";
import { interests } from "../data/portfolio";

export default function Interests() {
  return (
    <View id="interests" className="py-28 bg-white px-6 relative overflow-hidden">
      <View className="absolute top-20 left-10 w-64 h-64 rounded-full bg-blue-50/50 glow-orb" />
      <View className="absolute bottom-10 right-10 w-48 h-48 rounded-full bg-violet-50/50 glow-orb" />

      <View className="max-w-4xl mx-auto z-10">
        <View className="items-center mb-16">
          <View className="bg-slate-100 rounded-full px-4 py-1.5 mb-4">
            <Text className="text-xs font-semibold text-slate-500 tracking-widest uppercase">
              Intereses
            </Text>
          </View>
          <Text className="text-4xl md:text-5xl font-extrabold text-slate-900 text-center tracking-tight">
            Lo que me apasiona
          </Text>
        </View>

        <View className="flex-row flex-wrap gap-5 justify-center">
          {interests.map((item, index) => (
            <View
              key={item.label}
              className="interest-card w-full md:w-[calc(33.333%-14px)] bg-white rounded-3xl border-2 border-slate-100 p-6 items-center"
            >
              <View className="w-16 h-16 rounded-2xl bg-slate-50 items-center justify-center mb-4 border border-slate-100">
                <Text className="text-lg font-mono font-bold text-slate-600">
                  {item.icon}
                </Text>
              </View>

              <Text className="text-base font-bold text-slate-900 mb-2 text-center">
                {item.label}
              </Text>

              <Text className="text-sm text-slate-500 text-center leading-5">
                {item.description}
              </Text>
            </View>
          ))}
        </View>
      </View>
    </View>
  );
}
